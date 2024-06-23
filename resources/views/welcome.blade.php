<p>This is with an anonymous component:</p>

<x-test :content="view('content')" />
<x-test :content="new App\Content" />

<p>This is with a class-based component:</p>

<x-test-component :content="view('content')" />
<x-test-component :content="new App\Content" />
