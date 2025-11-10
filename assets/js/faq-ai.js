// FAQ AI Floating Widget Script
(function() {
  function injectCssOnce() {
    var links = document.querySelectorAll('link[rel="stylesheet"]');
    for (var i=0; i<links.length; i++) {
      if ((links[i].href || '').indexOf('faq-ai.css') !== -1) { return; }
    }
    // Derive CSS path from the current script src to respect subfolder deployments
    var script = document.querySelector('script[src*="faq-ai.js"]');
    var href = 'assets/css/faq-ai.css';
    if (script) {
      var src = script.getAttribute('src') || '';
      href = src.replace(/js\/faq-ai\.js.*$/, 'css/faq-ai.css');
    }
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    document.head.appendChild(link);
  }

  function init() {
    injectCssOnce();
    var dataEl = document.getElementById('faqAiData');
    var suggestions = [];
    try {
      suggestions = JSON.parse(dataEl && dataEl.textContent ? dataEl.textContent : '{}').suggestions || [];
    } catch (e) {
      suggestions = [];
    }

    var toggle = document.getElementById('faqAiToggle');
    var panel = document.getElementById('faqAiPanel');
    var closeBtn = document.getElementById('faqAiClose');
    var input = document.getElementById('faqAiInput');
    var askBtn = document.getElementById('faqAiAsk');
    var suggWrap = document.getElementById('faqAiSuggestions');
    var activeIdx = -1;
    var messagesWrap = document.getElementById('faqAiMessages');

    if (!toggle || !panel) { return; }

    function togglePanel(forceOpen) {
      var open = forceOpen !== undefined ? forceOpen : !panel.classList.contains('active');
      if (open) {
        panel.classList.add('active');
        panel.setAttribute('aria-hidden', 'false');
        setTimeout(function(){ input && input.focus(); }, 150);
      } else {
        panel.classList.remove('active');
        panel.setAttribute('aria-hidden', 'true');
      }
    }

    function renderSuggestions(list) {
      suggWrap.innerHTML = '';
      var items = list.slice(0, 10);
      items.forEach(function(item, idx) {
        var div = document.createElement('div');
        div.className = 'faq-ai-suggestion' + (idx === activeIdx ? ' active' : '');
        div.setAttribute('data-idx', String(idx));
        div.innerHTML = '<div class="q">' + item.question + '</div>';
        div.addEventListener('click', function() {
          addMessage(item.question, 'question');
          addAnswer(item);
          suggWrap.style.display = 'none';
          activeIdx = -1;
        });
        suggWrap.appendChild(div);
      });
      if (!items.length) {
        suggWrap.style.display = 'none';
      } else {
        suggWrap.style.display = 'grid';
      }
    }

    function highlightActive() {
      var nodes = suggWrap.querySelectorAll('.faq-ai-suggestion');
      for (var i=0; i<nodes.length; i++) {
        nodes[i].classList.toggle('active', i === activeIdx);
      }
    }

    function filterSuggestions(query) {
      query = (query || '').toLowerCase();
      if (!query) { return suggestions; }
      return suggestions.filter(function(s) {
        return (s.question || '').toLowerCase().indexOf(query) !== -1 ||
               (Array.isArray(s.tags) && s.tags.join(' ').toLowerCase().indexOf(query) !== -1) ||
               ((s.category || '').toLowerCase().indexOf(query) !== -1);
      });
    }

    function addMessage(text, type) {
      var el = document.createElement('div');
      el.className = 'msg ' + (type === 'question' ? 'question' : 'answer');
      el.textContent = text;
      messagesWrap.appendChild(el);
      messagesWrap.scrollTop = messagesWrap.scrollHeight;
    }

    function addAnswer(item) {
      setTimeout(function(){
        var answerText = item.answer || 'Chưa có câu trả lời sẵn. Vui lòng liên hệ lễ tân hoặc thử câu hỏi khác.';
        addMessage(answerText, 'answer');
      }, 250);
    }

    // Ẩn gợi ý mặc định
    if (suggWrap) { suggWrap.style.display = 'none'; }

    // Events
    toggle.addEventListener('click', function(){ togglePanel(true); });
    closeBtn && closeBtn.addEventListener('click', function(){ togglePanel(false); });
    // Hiển thị gợi ý khi nhập từ khoá
    input && input.addEventListener('input', function(){
      var q = input.value || '';
      var list = filterSuggestions(q);
      activeIdx = list.length ? 0 : -1;
      renderSuggestions(list);
      highlightActive();
    });

    // Điều hướng gợi ý bằng phím lên/xuống và Enter để chọn
    input && input.addEventListener('keydown', function(e){
      var nodes = suggWrap.querySelectorAll('.faq-ai-suggestion');
      if (!nodes.length) { return; }
      if (e.key === 'ArrowDown') {
        e.preventDefault();
        activeIdx = Math.min(activeIdx + 1, nodes.length - 1);
        highlightActive();
      } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        activeIdx = Math.max(activeIdx - 1, 0);
        highlightActive();
      } else if (e.key === 'Enter') {
        e.preventDefault();
        var list = filterSuggestions(input.value || '');
        if (activeIdx >= 0 && list[activeIdx]) {
          var item = list[activeIdx];
          addMessage(item.question, 'question');
          addAnswer(item);
          suggWrap.style.display = 'none';
          activeIdx = -1;
        }
      } else if (e.key === 'Escape') {
        suggWrap.style.display = 'none';
        activeIdx = -1;
      }
    });
    askBtn && askBtn.addEventListener('click', function(){
      var q = (input && input.value || '').trim();
      if (!q) return;
      addMessage(q, 'question');
      var list = filterSuggestions(q);
      // nếu có gợi ý, tự động chọn gợi ý đầu
      if (list.length) { addAnswer(list[0]); }
      // hiện gợi ý để người dùng chọn câu khác nếu muốn
      activeIdx = list.length ? 0 : -1;
      renderSuggestions(list);
      highlightActive();
    });

    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape') {
        togglePanel(false);
        if (suggWrap) { suggWrap.style.display = 'none'; }
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else { init(); }
})();