<p>Calculator 1</p>
<form action="/calculator/" method="get">
    <input type="text" name="arg1" value="<?=$arg1?>">
    <select name="operation">
        <option <?php if ($operation == "+") echo "selected"?> >+</option>
        <option <?php if ($operation == "-") echo "selected"?> >-</option>
        <option <?php if ($operation == "*") echo "selected"?> >*</option>
        <option <?php if ($operation == "/") echo "selected"?> >/</option>
    </select>
    <input type="text" name="arg2" value="<?=$arg2?>">
    <input type="submit" value="=">
    <input readonly type="text" name="result" value="<?=$result?>">
</form>
<br>
<hr>
<p>Calculator 2</p>
<form action="/calculator/" method="get">
    <input type="text" name="arg1" value="<?=$arg1?>">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <input type="text" name="arg2" value="<?=$arg2?>">
    <input type="submit" value="=">
    <input readonly type="text" name="result2" value="<?=$result?>">
</form>