@extends('public.app')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" data-page="{{ url('/cdd/cddList') }}" onclick="_tab_load(this,1)"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">候选人列表</span></a> </li>
                </ul>
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane p-l-10 p-r-10 p-t-15 p-b-15 active" id="tab1" role="tabpanel"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            _load_tab_page_content();
        });
    </script>
@endsection