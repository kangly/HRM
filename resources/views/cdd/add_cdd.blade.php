<div class="card m-t-10">
    <form class="form-horizontal" method="post" id="form-save-cdd" action="{{ url('/cdd/saveCdd') }}">
        <div class="card-body p-t-0">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label"><span class="text-danger">*</span> 姓名</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="姓名" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label"><span class="text-danger">*</span> 电话</label>
                <div class="col-sm-3">
                    <input type="text" onblur="" class="form-control" name="phone" id="phone" placeholder="电话" maxlength="11" value="">
                    <div id="phone_check" class="important_note"></div>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 邮箱</label>
                <div class="col-sm-4">
                    <input type="text" onblur="" class="form-control" name="email" id="email" placeholder="邮箱" value="">
                    <div id="email_check" class="important_note"></div>
                </div>
            </div>

            <div class="form-group row">
                <label for="qq" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> QQ</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="qq" id="qq" placeholder="QQ" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="wx" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 微信</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="wx" id="wx" placeholder="微信" value="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 性别</label>
                <div class="col-sm-4 m-t-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="sex_0" value="0" checked>
                        <label class="form-check-label" for="sex_0">不详</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="sex_1" value="1">
                        <label class="form-check-label" for="sex_1">女</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="sex_2" value="2">
                        <label class="form-check-label" for="sex_2">男</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="avatar" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 头像</label>
                <div class="col-sm-4">
                    <input type="file" name="avatar" id="avatar">
                </div>
            </div>

            <div class="form-group row">
                <label for="birthday" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 出生日期</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="出生日期" readonly value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="degree" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 学历</label>
                <div class="col-sm-2">
                    <select class="form-control" name="degree" id="degree">
                        <option value="0" selected>请选择</option>
                        <option value="1">小学</option>
                        <option value="2">初中</option>
                        <option value="3">高中</option>
                        <option value="4">中专</option>
                        <option value="5">大专</option>
                        <option value="6">本科</option>
                        <option value="7">硕士</option>
                        <option value="8">博士</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="marital_status" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 婚姻状况</label>
                <div class="col-sm-2">
                    <select class="form-control" name="marital_status" id="marital_status">
                        <option value="0" selected>请选择</option>
                        <option value="1">未婚</option>
                        <option value="2">已婚未孕</option>
                        <option value="3">已婚已孕</option>
                        <option value="4">离婚</option>
                    </select>
                </div>
            </div>

            <div id="distpicker_area">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 省市</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="province" id="province">
                            <option value="" selected>请选择</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" name="city" id="city">
                            <option value="" selected>请选择</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 地区</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="area1" id="area1">
                            <option value="" selected>请选择</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" name="area2" id="area2">
                            <option value="" selected>请选择</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 详细地址</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" id="address" placeholder="详细地址" value="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 工作类型</label>
                <div class="col-sm-3">
                    <select class="form-control" name="level1" id="level1">
                        <option value="" selected>请选择</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" name="level2" id="level2">
                        <option value="" selected>请选择</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select class="form-control" name="level3" id="level3">
                        <option value="" selected>请选择</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="nationality" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 国籍</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="nationality" id="nationality" placeholder="国籍" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="id_card" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 身份证</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="id_card" id="id_card" placeholder="身份证" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="self_assessment" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 自我评价</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="self_assessment" id="self_assessment" placeholder="自我评价"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="language" class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 语言能力</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="language" id="language" placeholder="语言能力" value="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><span class="text-danger text-danger-hide">*</span> 候选人类型</label>
                <div class="col-sm-4 m-t-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cdd_type" id="cdd_type_A" value="A" checked>
                        <label class="form-check-label" for="cdd_type_A">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cdd_type" id="cdd_type_B" value="B">
                        <label class="form-check-label" for="cdd_type_B">B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cdd_type" id="cdd_type_C" value="C">
                        <label class="form-check-label" for="cdd_type_C">C</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cdd_type" id="cdd_type_D" value="D">
                        <label class="form-check-label" for="cdd_type_D">D</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cdd_type" id="cdd_type_E" value="E">
                        <label class="form-check-label" for="cdd_type_E">E</label>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $id }}">
    </form>
</div>

<script type="text/javascript">
    $(function () {
        $('#birthday').datetimepicker({
            fontAwesome:'font-awesome',//指定图标
            language: "zh-CN",//配置中文
            autoclose: true,//自动关闭
            minView: 2,//不显示小时分视图
            format: "yyyy-mm-dd"//日期显示格式
        });

        $('#distpicker_area').distpicker({
            province: '',
            city: '',
            district: '',
            area: ''
        });
    });

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