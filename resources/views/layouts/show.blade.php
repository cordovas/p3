@extends('layouts.master')

@section('title')
    Lottery App!
@endsection

@section('content')

    <h2> How to win the lottery </h2>

    <form action='search.php' method='GET'>
        <div class="form-group">
            <label for="numberRange">Total numbers:</label>
            <input type="text"
                   class="form-control"
                   id="numberRange"
                   name='totalNumbers'
                   placeholder="How many numbers are in the range?"
                   value='<?= $totalNumbers ?? '' ?>' >
            <?php if (isset($errors)) : ?>
            <small id="emailHelp" class="form-text textColor">
                <?php foreach ($errors as $error) : ?>
                    <?= $error ?>
                <?php endforeach; ?>
            </small>
            <?php endif ?>
        </div>


        <div class="form-group">
            <label for="numberSelection">Random number quantity?</label>
            <select class="form-control" name='randomNumbers' id="numberSelection">
                <option value="1" <?php if (isset($randomNumbers) and $randomNumbers == 1) echo 'selected' ?>>1</option>
                <option value="2" <?php if (isset($randomNumbers) and $randomNumbers == 2) echo 'selected' ?>>2</option>
                <option value="3" <?php if (isset($randomNumbers) and $randomNumbers == 3) echo 'selected' ?>>3</option>
                <option value="4" <?php if (isset($randomNumbers) and $randomNumbers == 4) echo 'selected' ?>>4</option>
                <option value="5" <?php if (isset($randomNumbers) and $randomNumbers == 5) echo 'selected' ?>>5</option>
                <option value="6" <?php if (isset($randomNumbers) and $randomNumbers == 6) echo 'selected' ?>>6</option>
                <option value="7" <?php if (isset($randomNumbers) and $randomNumbers == 7) echo 'selected' ?>>7</option>
            </select>
        </div>

        <div class="form-group form-check">
            <input type="checkbox"
                   class="form-check-input"
                   id="odds"
                   name='showOdds' <?php if (isset($showOdds) and $showOdds) echo 'checked' ?> >
            <label class="form-check-label" for="odds">Show me my odds!</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php if (isset($errors) && (count($errors) == 0)) : ?>

    <?php if (isset($totalNumbers)) : ?>

    <div class="alert alert-primary top-spacing" role="alert">
        Your amazingly lucky numbers are:
        <?php echo implode(', ', $lotteryList); ?>
    </div>

    <?php endif; ?>

    <?php if (isset($showOdds)) : ?>

    <div class="alert alert-warning" role="alert">
        Your odds of winning are 1 in
        <?php echo $oddResults; ?>
    </div>

    <?php endif; ?>
    <?php endif; ?>


    <p style='margin-top: 100px;'>

    </p>
@endsection