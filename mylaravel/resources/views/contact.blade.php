<?php //<from action="{{ route('contactstore') }}" method="POST">  ?>
<from action="{{ route('contactstore') }}" method="POST">

    @csrf

    <label for="name"> name </label>
    <input type="text" name="name">
    <input type="submit" value="submit">

</form>
