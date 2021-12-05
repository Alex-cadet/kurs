    <div class="form">
        <form method="POST" action="">
            <h3 style="color:black;text-align:center">Возрастной состав региона</h3>
            <input name="id" type="text" placeholder="id">
            <input name="adults" type="text" placeholder="Взрослые">
            <input name="child" type="text" placeholder="Дети">
            <input name="pensioners" type="text" placeholder="Пенсионеры">
            <input type="submit" value="Отправить">
            @csrf
        </form>
        </div>
        @extends('layout')

</body>
</html>