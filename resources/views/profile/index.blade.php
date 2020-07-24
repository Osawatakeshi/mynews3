@expand('layout.profile')
@section('title', '登録済みのプロフィール一覧')

section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('ProfileController@index') }}" method="get">
                    <div class="form-group row">
                        <div class="col-md-8">
                             <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-profile col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <td width="10%">ID</td>
                                <td width="20%">名前(name)</td>
                                <td width="20%">性別(gender)</td>
                                <td width="20%">趣味(hobby)</td>
                                <td width="50%">自己紹介(introduction)</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $posts)
                                <tr>
                                    <td>{{ $profile->id }}</td>
                                    <td>{{ $profile->name }}</td>
                                    <td>{{ $profile->gender }}</td>
                                    <td>{{ $profile->hobby }}</td>
                                    <td>{{ $profile->introduction }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
endsection