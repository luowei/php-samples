<?php
/**
 * Created by JetBrains PhpStorm.
 * User: luowei
 * Date: 13-3-28
 * Time: 下午1:58
 * To change this template use File | Settings | File Templates.
 */

?>

<script type="text/javascript">
    $.ajaxFileUpload({
        url:'upload.php',//服务器端程序
        secureuri:false,
        fileElementId:'res_file',//input框的ID
        dataType: 'json',//返回数据类型
        beforeSend:function(){//上传前需要处理的工作，如显示Loading...
        },
        success: function (data, status){//上传成功
            if(data.success == 1){
                //从data中获取数据，进行处理
            } else{
                alert('上传失败！');
            }
        }
    });
</script>