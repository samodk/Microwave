<?php /* Smarty version Smarty3-RC3, created on 2012-05-29 23:38:27
         compiled from "/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/contributors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2100249444fc5b2539e1753-05751327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '343e6ec663abf4fb43d35da6b7ff817744090ae3' => 
    array (
      0 => '/home4/sandeep4/public_html/websupplements/projects/virtual_labs/application/templates/contributors.tpl',
      1 => 1290158921,
    ),
  ),
  'nocache_hash' => '2100249444fc5b2539e1753-05751327',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <table width="1002" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
      </tr>
      <tr>
        <td id="panel_bg"><div id="container">
        
          <div class="page_heading">
         
          
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="6"><img src="images/heading_l.jpg" alt="" width="6" height="43" /></td>
                <td><h1>Contributors</h1></td>
                <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
              </tr>
            </table>
          </div>
          <div class="gap"></div>
          <div class="rows">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div class="panel_content2">
                    <div>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><h1 class="heading1">&nbsp;</h1></td>
                          <td width="75"><span class="heading1"><img src="images/icon_contributors.png" alt="" width="70" height="70" class="icon" /></span></td>
                        </tr>
                      </table>
                    </div>
                  <div class="content">
                   <?php $_smarty_tpl->tpl_vars['ctr'] = new Smarty_variable(1, null, null);?>
          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['name'] = 'location';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arr')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total']);
?>
                      <div class="contributors" <?php if ($_smarty_tpl->getVariable('ctr')->value==1){?>style="padding-top:0;"<?php }?>>
                      <?php if ($_smarty_tpl->getVariable('ctr')->value%2!=0){?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="115" valign="top"><img src="<?php echo @UPLOADS_CONTRIBUTORS_URL;?>
<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_img'];?>
" alt="" width="98" class="thumb2" /></td>
                            <td valign="top"><span class="blue_text"><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_name'];?>
</span><br />
                           <?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_title'];?>

                              <br /><br />
                             <?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_description'];?>
 </td>
                          </tr>
                        </table>
                        <?php }else{ ?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td valign="top"><span class="blue_text"><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_name'];?>
</span><br />
                           <?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_title'];?>

                              <br /><br />
                             <?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_description'];?>
 </td>
                             <td width="115" align="right" valign="top"><img src="<?php echo @UPLOADS_CONTRIBUTORS_URL;?>
<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['contributor_img'];?>
" alt="" width="98" height="101" class="thumb2" /></td>
                          </tr>
                        </table>
                        <?php }?>
                      </div>
                      <?php $_smarty_tpl->tpl_vars['ctr'] = new Smarty_variable($_smarty_tpl->getVariable('ctr')->value+1, null, null);?>
                      <?php endfor; endif; ?>
                  </div>
                </div></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
      </tr>
    </table>
   <?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>