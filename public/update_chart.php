<?php
// URL последней версии Chart.js (минифицированный файл)
$url = "https://cdn.jsdelivr.net/npm/chart.js";

// Указываем путь, куда сохранить файл (в текущую папку)
$destination = __DIR__ . "/Chart.min.js";

// Загружаем и сохраняем файл
$fileContent = file_get_contents($url);
if ($fileContent !== false) {
    file_put_contents($destination, $fileContent);
    echo "✅ Chart.js успешно загружен и обновлён!";
} else {
    echo "❌ Ошибка при загрузке Chart.js";
}
?>
