<style>
.help-inline{
    line-height: 28px;
}
</style>
<div class="well-large">
<div class="form-horizontal">
    <fieldset>
        <legend>支付信息</legend>     
        <form name="alipaysubmit" id="alipaysubmit" action="<?php echo $server_url;?>" method ="get">
            <?php foreach ($para as $key => $val) {?>
                <input type='hidden' name='<?php echo $key;?>' value='<?php echo $val;?>'/>
            <?php }?>
            <input type="submit" value="去支付"/>
        </form>
    </fieldset>
</div>
</div>