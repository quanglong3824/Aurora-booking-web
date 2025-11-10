<?php
// Aggregate FAQ suggestions from JSON files for the floating AI widget
$faqDir = __DIR__ . '/../../AI Support/docs_ques';
$faqFiles = glob($faqDir . '/*.json');
$suggestions = [];
// Only allow customer-related categories
$allowedCategories = ['Hỗ trợ khách hàng'];

foreach ($faqFiles as $file) {
    $content = file_get_contents($file);
    if ($content === false) { continue; }
    $json = json_decode($content, true);
    if (!is_array($json)) { continue; }

    // Infer category from file or json
    $category = isset($json['category']) ? $json['category'] : (basename($file));
    if (isset($json['items']) && is_array($json['items'])) {
        foreach ($json['items'] as $item) {
            if (!isset($item['question'])) { continue; }
            if (!in_array($category, $allowedCategories, true)) { continue; }
            $suggestions[] = [
                'id' => isset($item['id']) ? $item['id'] : null,
                'question' => $item['question'],
                'answer' => isset($item['answer']) ? $item['answer'] : null,
                'category' => $category,
                'tags' => isset($item['tags']) ? $item['tags'] : [],
                'related_files' => isset($item['related_files']) ? $item['related_files'] : []
            ];
        }
    }
}

// Limit initial payload but keep enough for demo
if (count($suggestions) > 100) {
    $suggestions = array_slice($suggestions, 0, 100);
}
?>

<!-- FAQ AI Floating Widget -->
<div id="faqAiWidget" class="faq-ai-widget" aria-live="polite">
    <button class="faq-ai-toggle" id="faqAiToggle" aria-label="Mở trợ lý FAQ AI">
        <i class="fas fa-question-circle"></i>
        <span class="faq-ai-toggle-text">Hỗ trợ</span>
    </button>

    <div class="faq-ai-panel" id="faqAiPanel" role="dialog" aria-modal="false" aria-hidden="true">
        <div class="faq-ai-header">
            <div class="faq-ai-title">FAQ AI - Trợ lý hỗ trợ</div>
            <button class="faq-ai-close" id="faqAiClose" aria-label="Đóng trợ lý">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq-ai-body">
            <div class="faq-ai-chat" id="faqAiChat" aria-label="Giao diện chat hỗ trợ">
                <div class="faq-ai-messages" id="faqAiMessages"></div>
            </div>
            <div class="faq-ai-suggestions" id="faqAiSuggestions" aria-label="Danh sách gợi ý câu hỏi"></div>
            <div class="faq-ai-input-wrap">
                <input type="text" id="faqAiInput" class="faq-ai-input" placeholder="Nhập từ khoá câu hỏi..." aria-label="Nhập câu hỏi cần hỗ trợ">
                <button class="faq-ai-ask" id="faqAiAsk">Hỏi</button>
            </div>
        </div>
    </div>
</div>

<script type="application/json" id="faqAiData">
<?php echo json_encode(['suggestions' => $suggestions], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>