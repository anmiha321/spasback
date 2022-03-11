<?php
/*Пример подсвечивания ссылки при нахождении на целевой странице 
(не забыть прописать класс 'active' в CSS)*/
<a class="header__link <?php if($_SERVER['REQUEST_URI'] == '/products/apartment/') echo 'active';?>" href="/products/apartment/">ОХРАНА КВАРТИР</a>

?>