<div class ="filter">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <div class="perpage">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <select name = "perpage" class="form-control input-sm perpage filter mr10">
                    @for($i = 20; $i<=200; $i+=20)
                        <option value="{{$i}}">{{$i}} records </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="action">
            <div class="uk-flex uk-flex-middle">
                <select name="user_catalogue_id" class="form-control mr10">
                    <option value="0" selected="selected">
                        Member group
                    </option>
                    <option value="1">Administrators</option>
                </select>
                <div class="uk-search uk-flex ul-flex-middle mr10">
                    <div class="input-group">
                        <input type="text" name="keyword" value="" placeholder="Search here" class="form-control mr10">
                        <span class="input-group-btn">
                            <button type="submit" name="search" value="search" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </div>
                <a href="" class="btn btn-danger mb0 btn-sm"><i class="fa fa-lus"></i>Add new member</a>
            </div>
        </div>
    </div>
</div>
