<?php
function mytheme_settings_page()
   {
   $my_option = get_option('my_data'); 
    
    $font_color = '';
    $font_family='';
    $disable_logo = '';
    $text1 = '';
    $text2 = '';
    if(is_array($my_option) && isset($my_option['font_color']) &&  isset($my_option['font_family']) && isset($my_option['disable_logo']) && isset($my_option['text1'] ) && isset($my_option['text2'])){
     $font_color = $my_option['font_color'];
     $font_family = $my_option['font_family'];
     $text1 = $my_option['text1'];   
     $text2 = $my_option['text2']; 
     $disable_logo = $my_option['disable_logo'];   
    }
if(isset($_POST['save_btn']) && $_SERVER['REQUEST_METHOD'] == "POST") {
$font_family = isset($_POST['font_family']) ? sanitize_text_field($_POST['font_family'])  : '';
$font_color = isset($_POST['font_color']) ? sanitize_text_field($_POST['font_color'])  : '';
$disable_logo = isset($_POST['disable_logo']) ? 1:0;
$text1 = isset($_POST['text1']) ? sanitize_text_field($_POST['text1'])  : '';
$text2 = isset($_POST['text2']) ? sanitize_text_field($_POST['text2'])  : '';
update_option('my_data',array(
    'font_color' => $font_color,
    'font_family' => $font_family,
    'disable_logo' => $disable_logo,
    'text1' => $text1,
    'text2' => $text2,

));
}




    
    ?>
<div class="theme_settings">
    <h1>Icodeguru Theme 1.0</h1>
</div>

<div>
<form action=""method = "post">
    <label for="myfont">Font family</label>
    <input type="text" id= "myfont" name = "font family" value="<?php echo esc_attr($font_family);?>">

    <label for="fontcolor">Font color</label>
    <input type="text" id= "fontcolor" name = "font color"  value="<?php echo esc_attr($font_color);?>" >

    <label for="disablelogo">Disable Logo</label>
    <input type="checkbox" id ="disablelogo"name = "disable_logo"<?php if($disable_logo) echo 'checked'?> >
    <button type="submit" value="save" class="btn btn-primary" name = "save_btn">Save</button>
    
    <label for="text1">My text</label>
    <input type="text" id= "text1" name = "text1" value="<?php echo ($text1);?>">
    <label for="text2">My Paragraph</label>
    <input type="text" id="text2" name="text2"value="<?php echo ($text2);?>">
</form>


</div>
     <?php
   }
