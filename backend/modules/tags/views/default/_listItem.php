<?
use yii\helpers\Html;
use wbp\widgets\RemoveButton;
?>
<tr>
    <td style="width: 30px"><?=$model->id ?></td>
    <td>
        <span style="width: 250px;">
            <div class="d-flex align-items-center">
                <div class="ml-3">
                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0"><?=$model->title ?></div>
                </div>
            </div>
        </span>
    </td>
    <td nowrap="nowrap" style="width: 15%; text-align: center;" class="center">
        <a href="<?=$model::ACTION?>/default/edit?id=<?=$model->id ?>" class="btn btn-sm btn-clean btn-icon" title="Edit">
            <i class="la la-edit"></i>
        </a>
        <a href="<?=$model::ACTION?>/default/remove?id=<?=$model->id ?>" title="Delete" class="btn btn-sm btn-clean btn-icon delete_link" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?">
            <i class="la la-trash"></i>
        </a>
    </td>
</tr>
