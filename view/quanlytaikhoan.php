


<div class="inner-right" style="text-align: center; display: flex; flex-direction: column; padding: 0px 0px 10px 0px">
                            <h1 class="text-center">Trang Quản Lý Tài Khoản</h1>
                            <?php 
                             if (!class_exists('User')) {
                                include './controller/user.php';
                            }
                                $p = new User();
                                $result = $p->selectAllAccountController();
                                echo '<table style="border: 1px solid black; border-collapse: collapse; margin: 10px 20px; width: 80%;"> 
                                <thead>
                                    <tr style="background-color: #f2f2f2; text-align: center;">
                                        <th style="border: 1px solid black; padding: 8px;">STT</th>
                                        <th style="border: 1px solid black; padding: 8px;">Tên Tài Khoản</th>
                                        <th style="border: 1px solid black; padding: 8px;">Mật Khẩu</th>
                                        <th style="border: 1px solid black; padding: 8px;">Loại Tài Khoản</th>
                                        <th style="border: 1px solid black; padding: 8px;">Áp Dụng</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        
                        $index = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo '
                                <tr style="text-align: center;">
                                    <td style="border: 1px solid black; padding: 8px;">' . $index . '</td>  
                                    <td style="border: 1px solid black; padding: 8px;">' . $row['TenTaiKhoan'] . '</td>
                                    <td style="border: 1px solid black; padding: 8px;">' . $row['MatKhau'] . '</td>
                                    <td style="border: 1px solid black; padding: 8px;">' . $row['LoaiTaiKhoan'] . '</td>
                                    <td style="border: 1px solid black; padding: 8px;">
                                        <a href="editTaiKhoan.php?edit=' . $row['MaTaiKhoan'] . '" style="color: blue; text-decoration: none;">Sửa</a>
                                    </td>
                                </tr>';
                            $index++;
                        }
                        
                        echo '</tbody></table>';
                        
                                
                               
                               
                               
                               
                                echo '  </tbody>
                                    </table>' ;
                               
                            ?>


                        </div>
                    </section>