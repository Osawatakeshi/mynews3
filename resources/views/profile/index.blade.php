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
                                <th width="10%">ID</th>
                                <th width="20%">名前(name)</th>
                                <th width="20%">性別(gender)</th>
                                <th width="20%">趣味(hobby)</th>
                                <th width="50%">自己紹介(introduction)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ \Str::limit($profile->name, 100) }}</td>
                                    <td>{{ \Str::limit($profile->gender, 100) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 100) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 250) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
endsection