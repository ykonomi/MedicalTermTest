@extends('layouts.base')

@section('content')
<div>
    <a href={{ route('menu.select') }}>問題をとく</a>
</div>
<div>
    <a href={{ route('menu.select_condition') }}>似た単語テスト(テスト運用中)</a>
</div>
<div>
    <a href={{ route('menu.history') }}>テスト履歴へ</a>
</div>
<div>
    <a href={{ route('menu.list') }}>単語の一覧を表示</a>
</div>
@endsection