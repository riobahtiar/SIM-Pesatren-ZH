<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

        	<div id="basicform" class="subcontent"><!--contenttitle--><h3>Halaman Pengumuman</h3><br><br>

                    <form class="stdform" action="#" method="post">
                    	
                        <p>
                        	<label>Judul</label>
                            <span class="field"><input name="judul_pengumuman" type="text" class="longinput" />
                            </p>
                       	
                        <p>
                        	<label>Isi Pengumuman</label>
                            <span class="field"><textarea cols="80" rows="5" class="longinput"></textarea></span> 
                        </p>
                        
                        <p>
                        	<label>Kategori</label>
                            <span class="field">
                            <select name="select">
                            	<option value="">Choose One</option>
                                <option value="">Selection One</option>
                                <option value="">Selection Two</option>
                                <option value="">Selection Three</option>
                                <option value="">Selection Four</option>
                            </select>
                            
                            </span>
                        </p>
                        

                        
                        <br clear="all" /><br />
                        
                        <p class="stdformbutton">
                        	<button class="submit radius2">Submit Button</button>
                            <input type="reset" class="reset radius2" value="Reset Button" />
                        </p>
                        
                        
                    </form>