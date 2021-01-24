<div>
    Show Tweets

    <p>{{ $content }}</p>

    <form method="post" wire:submit.prevent="create">
        <input name="content" id="content" wire:model="content"></textarea>
        @error('content') {{ $message }} @enderror
        <button type="submit">Enviar</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        <p>{{ $tweet->user->name }} - {{ $tweet->content }}</p>
    @endforeach
</div>
