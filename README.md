# Bài tập lớn môn lập trình web cho đề tài booking hotel
## A. Cài đặt máy ảo


## B. Cài đặt môi trường
#### 1. **Sử dụng Git:**
     ```bash
     sudo apt update
     sudo apt install git
     ```
- Kiểm tra xem đã cài git thành công hay chưa:

    ```bash
    git --version
    ```
- Thiết lập tài khoản Git trên máy ảo:
    ```bash
    git config --global user.name "Tên của bạn"
    git config --global user.email "địa chỉ email của bạn"
    ```

#### 2. **Cài đặt và cấu hình SSH**
**2.1. Cài đặt**
    ```bash
    sudo apt-get update
    sudo apt-get install openssh-server -y
    sudo systemctl start sshd
    sudo systemctl enable ssh
    ```
- Để xác minh cài đặt thành công và SSH đang chạy, hãy sử dụng lệnh:
    ```bash
    sudo service ssh status
    ```
    ![Alt text](image.png)
**2.2. Cấu hình SSH.**
- Mở file cấu hình:
    ```bash
    sudo nano /etc/ssh/sshd_config
    ```
- Cấu hình như sau:
    ```
    Include /etc/ssh/sshd_config.d/*.conf

    Port 22
    ListenAddress 0.0.0.0

    HostKey /etc/ssh/ssh_host_rsa_key
    HostKey /etc/ssh/ssh_host_ecdsa_key
    HostKey /etc/ssh/ssh_host_ed25519_key
    SyslogFacility AUTHPRIV
    PermitRootLogin yes
    PubkeyAuthentication yes
    AuthorizedKeysFile      .ssh/authorized_keys .ssh/authorized_keys2
    # Chophep/Tu choi SSH
    # AlowUsers user1
    # DenyUsers user1
    # Tu choi SFTP
    #Match User user2
    #ForceCommand /bin/false
    #Match User user3
    #ForceCommand internal-sftp

    UsePAM yes
    X11Forwarding yes
    PrintMotd no
    AcceptEnv LANG LC_*
    Subsystem sftp /usr/lib/openssh/sftp-server
    ```

- Để thực thi thay đổi, chạy lệnh:
    ```bash
    sudo systemctl restart sshd.service
    ```
**2.3. Cấu hình tường lửa.**
- Công cụ cấu hình tường lửa mặc định trong Ubuntu là UFW, cấu hình bằng lệnh:
    ```bash
    sudo ufw allow from any to any port 22 proto tcp
    ```

#### 3. Cài đặt mysql
- Cài đặt gói mysql:
    ```bash
    sudo apt install mysql-server -y
    ```
- Kích hoạt:
    ```bash
    sudo systemctl start mysql.service
    sudo systemctl is-active mysql
    ```
- Cài đặt passwork:
    ```bash
    sudo mysql
    ALTER USER root@localhost IDENTIFIED WITH mysql_native_password BY 'admin';
    ```
- Cài bảo mật cho mysql:
    ```bash
    sudo mysql_secure_installation
    ```
    ![Alt text](image-1.png)
    ![Alt text](image-2.png)

#### 4. Cấu hình máy chủ web Apache

- Sử dụng lệnh sau để cài đặt Apache trên máy ảo:
     ```bash
     sudo apt update
     sudo apt install apache2
     ```
- Kiểm tra trạng thái Apache:

     ```bash
     sudo systemctl status apache2
     ```

- Mở cổng truy cập cho Apache:
     ```bash
     sudo ufw allow 80/tcp
     ```

- Kiểm tra Apache bằng trình duyệt web:
     ```
     http://your_server_ip/
     ```
    `your_server_ip`: Địa chỉ IP của máy ảo.

- Lưu trữ tệp dự án web:

     ```bash
     sudo cp -r /path/to/your/project/* /var/www/html/
     ```
    `/path/to/your/project/*`: Đường dẫn tới thư mục dự án web của bạn.

- Phân quyền cho tệp và thư mục:
     ```bash
     sudo chown -R www-data:www-data /var/www/html
     ```

- Khởi động lại Apache:
     ```bash
     sudo systemctl restart apache2
     ```

- Tạo một tệp cấu hình ảo (Virtual Host):
     ```bash
     sudo nano /etc/apache2/sites-available/yourapp.conf
     ```
   - Trong đó `yourapp.conf` là tên tệp cấu hình ảo bạn muốn sử dụng.

- Cấu hình Virtual Host:
     ```apache
     <VirtualHost *:80>
         ServerAdmin webmaster@yourdomain.com
         ServerName yourdomain.com
         DocumentRoot /var/www/html/yourapp
         
         ErrorLog ${APACHE_LOG_DIR}/error.log
         CustomLog ${APACHE_LOG_DIR}/access.log combined
     </VirtualHost>
     ```
   - Trong đó:
     - `ServerAdmin`: Địa chỉ email của bạn.
     - `ServerName`: Tên miền của ứng dụng hoặc địa chỉ IP.
     - `DocumentRoot`: Đường dẫn đến thư mục gốc của ứng dụng web. Điều này phải trỏ đến thư mục chứa tất cả tệp của ứng dụng của bạn.

- Kích hoạt Virtual Host và khởi động lại Apache:
    ```bash
    sudo a2ensite yourapp.conf
    sudo systemctl restart apache2
    ```

#### 5. Cài đặt PHP
- Cài đặt PHP và các gói liên quan:
   ```bash
   sudo apt update
   sudo apt install php libapache2-mod-php php-mysql
   ```

        `php`: Cài đặt gói chính của PHP.
        `libapache2-mod-php`: Gói này liên kết PHP với Apache.
        `php-mysql`: Gói này cho phép PHP làm việc với cơ sở dữ liệu MySQL.

- Kiểm tra cài đặt PHP:
   ```bash
   php -v
   ```

- Kiểm tra tệp cấu hình:
   ```bash
   ls /etc/apache2/mods-enabled/php*.conf
   ```

- Khởi động lại Apache:
   ```bash
   sudo systemctl restart apache2
   ```

## C. Đưa project lên máy ảo
#### 1. Đưa file lên máy ảo và quản lý source bằng GIT