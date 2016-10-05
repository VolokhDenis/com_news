<?php
/**
 * Created by yooyoo labs
 * copyright: 2016 YooyooLabs
 * User: denisvolokh
 * Date: 05.10.16
 * Time: 22:10
 */

defined('_JEXEC') or die();
?>

<form action="index.php?option=com_news&layout=edit&id=<?php echo $this->item->id?>" method="POST" id="adminForm"	name="adminForm">
<!-- выбираю по номеру ID нужную новость оторую собираюсь редактировать и выбираю нужные поля-->
    <div class="form-horizontal">

        <?php foreach ($this->form->getFieldsets() as $name=>$fieldset) :?>
            <fieldset class="adminform">

                <legend><?php echo JText::_($fieldset->label); ?></legend>

                <div class="row-fluid">

                    <div class="col-lg-6">
                        <?php foreach ($this->form->getFieldsets($name) as $field) :?>
                            <div class="control-group">
                                <div class="control-label">
                                    <?php echo $field->label; ?>
                                </div>
                                <div class="controls">
                                    <?php echo $field->input; ?>
                                </div>
                            </div>

                        <?php endforeach;?>
                    </div>

                </div>

            </fieldset>
        <?php endforeach;?>

    </div>



    <input type="hidden" name="task" value="">
    <?php echo JHtml::_('form.token');?> <!--Этот код нужен в любом случае для безопасности страницы-->
</form>
