<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
							<!-- Table head -->
							<thead>
								<tr>
								    <?php
								    $keys = isset($columns) && $columns ? array_keys($columns) : array_keys($data[0]);
								    $end = count($keys)-1;
                                    foreach($keys as $i=>$column)
                                    {
                                        $class = $i==0 ? 'border-0 rounded-start' : ( $i==$end ? 'border-0 rounded-end':'border-0');
                                     
                                    ?>
                                        <th scope="col" class="<?php echo $class; ?>"><?php echo $column; ?></th>
                                    <?php
                                    }
                                    ?>
								</tr>
							</thead>

							<!-- Table body START -->
							<tbody>
							    
							    <?php
                                foreach($data as $row)
                                {
                                ?>
                                <tr>
                                <?php
                                foreach(array_values($columns) as $i => $column)
                                {
                                ?>
                                <td class="table-responsive-title mb-0"><h6><?php echo $row[$column]; ?></h6></td>
                                <?php
                                }
                                ?>
                                </tr>
                                <?php
                                }
                                ?>

							</tbody>
							<!-- Table body END -->
						</table>