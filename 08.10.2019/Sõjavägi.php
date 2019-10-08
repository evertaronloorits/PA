<?php
?>
<div id ="container">
<form action="sõjavägi-action.php" method="get">
    <div id="input-group">
        <label for =""></label>
        <select id="nation" name="nation">
            <option value="et">Eestlane</option>
            <option value="ru">Venelane</option>
            <option value="fi">Soomalne</option>
            <option value="se">Rootslane</option>
        </select>
    </div>
    <div id="input-group">
        <label for=""></label>
        <input type="text" id="age" name="age">
    </div>
    <div id="input-group">
        <label for="edu-begin">algharidus</label>
        <input type="radio" id="edu" name="edu-begin" value="begin">
        <label for="edu-basic">põhiharidus</label>
        <input type="radio" id="edu" name="edu-basic" value="basic">
        <label for="edu-medium">keskharidus</label>
        <input type="radio" id="edu" name="edu-medium" value="medium">
        <label for="edu-grand">kõrgharidus</label>
        <input type="radio" id="edu" name="edu-grand" value="grand">
    </div>
    <div id="input-group">
        <input type="submit" value="Kontrolli">
    </div>
</form>
</div>
