<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="search-form_content">
            <h2 class="search-form_content-title">
                日本と世界の時間と比較
            </h2>
        </div>
        <form action="result.php" class="search-form" method="get">
            <div class="search-form_item">
                <select class="search-form_item-select" name="city">
                    <option value="シドニー">
                        シドニー
                    </option>
                    <option value="上海">
                        上海
                    </option>
                    <option value="モスクワ">
                        モスクワ
                    </option>
                    <option value="ロンドン">
                        ロンドン
                    </option>
                    <option value="ヨハネスブルグ">
                        ヨハネスブルグ
                    </option>
                    <option value="ニューヨーク">
                        ニューヨーク
                    </option>
                </select>
            </div>
            <div class="search-form_button">
                <button class="search-form_button-submit" type="submit">
                    検索
                </button>
            </div>
        </form>
    </main>
</body>
</html>