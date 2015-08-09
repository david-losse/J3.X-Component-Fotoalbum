<?php
defined('_JEXEC') or die;

$nullDate = JFactory::getDbo()->getNullDate();

?><h1>Fotoalbum - FOTOS</h1>
<?php if ($this->items){ ?>
<table>
<tr>
<th style="background: #ccc;">JText::_('COM_FOTOALBUM_FOTOID');</th>
<th style="background: #ccc;">JText::_('COM_FOTOALBUM_FILENAME')</th>
<th style="background: #ccc;">JText::_('COM_FOTOALBUM_UPLOADER')</th>
<th style="background: #ccc;">JText::_('COM_FOTOALBUM_UPLOADEDON')</th>
</tr>
<?php foreach ($this->items as $item) : ?>
<tr>
<td><?php echo $item->foto_id; ?></td>
<td><?php echo $item->foto_filename; ?></td>
<td><?php echo $item->foto_uploader; ?> </td>
<td>
<?php
if ($item->foto_uploaddate != $nullDate) {
echo JHtml::_('date', $item->foto_uploaddate, 'd.m.Y - H:i');
} ?>
</td>
</tr>
<?php endforeach;?>
</table>
<?php } ?>