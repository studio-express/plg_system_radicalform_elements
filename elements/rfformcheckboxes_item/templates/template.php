<label class="uk-flex uk-flex-middle"><input class="uk-checkbox rf-checkbox <?php echo $props['css_classes'] ?> <?php echo $props['checkbox_required']?"required":"" ?>" type="checkbox" name="<?php echo $element['field_name'] ?>[]" value="<?php echo empty($props['value'])?"1":$props['value'] ?>"><div class="uk-margin-small-left"><?php echo $props['label'] ?></div></label>