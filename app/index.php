<?
// Получение данных из db.json
$url = file_get_contents('./db.json');
$cards = json_decode($url, true);
?>

<!doctype html>
<html lang="ru">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Styles -->
	<link rel="stylesheet" href="./css/app.min.css">
	<title>Title</title>
</head>

<body>

	<header class="header" id="header">
		<div class="container">
		</div>
	</header>

	<main class="main">
		<div class="cards">
			<div class="container">
				<div class="cards__inner">

                    <!--Вывод карточек-->
                    <? foreach ($cards['product'] as $card) : ?>

					<div class="cards__item">

						<img src="<?=$card["img"]?>" alt="Card name" class="cards__img">
						<span class="cards__name"><?=$card["name"]?></span>
						<span class="cards__price"><?=$card["price"]?> ₽</span>
						<button type="button" class="btn cards__btn">Купить</button>

					</div>

                    <? endforeach; ?>

				</div>
			</div>
		</div>
	</main>

	<footer class="footer" id="footer">
		<div class="container">

		</div>
	</footer>

    <div class="modal__mask">
        <div class="modal">
            <div class="modal__inner">
                <form method="post" class="modal__form" name="mailForm" id="mailForm">
                    <input type="text" class="modal__input" id="name" name="name" required>
                    <input type="tel" id="phone" name="phone" class="modal__input" required>
                    <input type="email" id="email" name="email" class="modal__input" required>
                    <input type="text" id="product" name="product" class="modal__input" readonly required>
                    <button class="btn modal__btn" type="submit" id="sendMail">Отправить</button>
                    <div class="modal__error" id="errorMess"></div>
                </form>
                <button type="button" class="modal__close">
                    <span>&times;</span>
                </button>
            </div>
        </div>
    </div>

	<!-- jQuery -->
	<script src="./js/include/jquery.min.js"></script>

	<!-- jQuery maskedinput -->
	 <script src="./js/include/jquery.maskedinput.min.js"></script>

	<!-- Custom JS -->
	<script src="./js/app.min.js"></script>
    <script src="./js/formMail.js"></script>
</body>

</html>