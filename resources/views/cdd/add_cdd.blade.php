<div class="card m-t-10">
    <form class="form-horizontal" method="post" id="form-save-cdd" action="{{ url('/cdd/saveCdd') }}">
        <div class="card-body p--0">
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label"><span class="text-danger">*</span> 姓名</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="name" id="name" placeholder="姓名">
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $id }}">
    </form>
</div>

<script type="text/javascript">
    function save(callback){
        submitTheForm('form-save-cdd',function(data){
            if(data>0){
                if(callback){
                    callback();
                }
            }
        });
    }
</script>