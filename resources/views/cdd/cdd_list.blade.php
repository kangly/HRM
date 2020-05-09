<div class="card">
    <div class="table-responsive">
        <div class="mb-2">
            <button type="button" class="btn btn-success btn-sm" onclick="editCdd(0)">新增候选人</button>
        </div>
        <table class="table table-bordered table-striped table-sm table-hover text-center">
            <thead class="thead-light">
            <tr>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>婚姻</th>
                <th>邮箱</th>
                <th>电话</th>
                <th>学历</th>
                <th>创建时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>小康</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <i class="fas fa-edit cursor-pointer" onclick="editCdd(1)"></i>
                    <i class="fas fa-trash cursor-pointer" onclick="deleteCdd(1)"></i>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    function cddList(){
        _p_a_load("{{ url('/cdd/cddList') }}",'tab1');
    }

    function editCdd(id){
        var url = '/cdd/addCdd?id='+id;
        _add_movable_popup('addCdd','新增候选人',url,'','',function(){
            cddList();
        });
    }
    
    function deleteCdd(id){
        
    }
</script>