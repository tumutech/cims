<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Share your Testimony with us.</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="title" id="focusedInput" type="text" placeholder = "Title" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="story" id="focusedInput" type="text" placeholder = "Story" required>
                                          </div>
                                        </div>
										
											
										
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Share"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
								
<?php

if (isset($_POST['save'])){
$firstname = $_POST['title'];
$lastname = $_POST['story'];





mysqli_query($conn,"insert into testimony (title,story,na) values('$firstname','$lastname','$session_id')")or die(mysqli_error());

?>
<script>
window.location = "testimony.php";
$.jGrowl("The Testimony Successfully added", { header: 'Testimony added' });
</script>
<?php
}

?>