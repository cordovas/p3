@extends('layouts.master')

@section('title')
    Lottery App!
@endsection

@section('content')

    <h2> How to win the lottery </h2>

    <form action='/p3/public/search-process' method='GET'>

        <div class="form-group">
            <label for="numberRange">Total numbers:</label>
            <input type="text"
                   class="form-control"
                   id="numberRange"
                   name='totalNumbers'
                   placeholder="How many numbers are in the range?"
                   value='<?= $totalNumbers ?? '' ?>'>
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
                <option value="1" @if($randomNumbers and $randomNumbers == 1) {{ 'selected' }} @endif>1</option>
                <option value="2" @if($randomNumbers and $randomNumbers == 2) {{ 'selected' }} @endif>2</option>
                <option value="3" @if($randomNumbers and $randomNumbers == 3) {{ 'selected' }} @endif>3</option>
                <option value="4" @if($randomNumbers and $randomNumbers == 4) {{ 'selected' }} @endif>4</option>
                <option value="5" @if($randomNumbers and $randomNumbers == 5) {{ 'selected' }} @endif>5</option>
                <option value="6" @if($randomNumbers and $randomNumbers == 6) {{ 'selected' }} @endif>6</option>
                <option value="7" @if($randomNumbers and $randomNumbers == 7) {{ 'selected' }} @endif>7</option>

            </select>
        </div>

        <div class="form-group form-check">
            <input type="checkbox"
                   class="form-check-input"
                   id="odds"
                   name='showOdds' {{ ($showOdds) ? 'checked' : ''}} >
            <label class="form-check-label" for="odds">Show me my odds!</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if ($totalNumbers)
        <div class="alert alert-primary top-spacing" role="alert">
            Your amazingly lucky numbers are:
            {{ implode(', ', $lotteryList) }}
        </div>
    @endif()


    @if($showOdds)

    <div class="alert alert-warning" role="alert">
    Your odds of winning are 1 in {{$oddResults}}
    </div>

    @endif


@endsection