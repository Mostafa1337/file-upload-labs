# 🔒 Web Security Labs

## 📌 Overview  
Welcome to **Web Security Labs**, a collection of hands-on labs designed to simulate **file upload vulnerabilities** with different levels and attack vectors. These labs help penetration testers, security researchers, and developers understand how insecure file uploads can be exploited and how to implement proper security measures to mitigate them.

## 🚀 Features  
✅ Multiple security labs focusing on **file upload vulnerabilities**  
✅ Covers different **attack scenarios**, including bypass techniques  
✅ Centralized dashboard for easy navigation  

---

## 💂️ Project Structure  

```
💂️ security-labs
 ├── 📂 labs             # Individual file upload vulnerability labs
 │   ├── 📂 lab1         # Basic file upload vulnerability
 │   ├── 📂 lab2         # Content-Type restriction bypass
 │   ├── 📂 lab3         # Double extension bypass
 │   ├── 📂 lab4         # Blacklist extensions bypass
 │   ├── 📂 lab5         # File upload leading to XSS attack
 ├── 📂 assets           # Static files (CSS, icons, etc.)
 │   ├── 📄 style.css
     ├── 📄 main.css
 │   ├── 📄 logo.ico
 ├── 📂 uploads          # Directory for uploaded files
 ├── 📄 index.php        # Main dashboard
 ├── 📄 README.md        # Documentation
```

---

## 🛠️ Setup Instructions  

### 1⃣ Clone the Repository  
```sh
git clone https://github.com/Mostafa1337/file-upload-labs.git
cd file-upload-labs
```

### 2⃣ Set Up File Uploads  
Ensure the `uploads/` directory exists and is writable:  
```sh
mkdir uploads
chmod 777 uploads
```

### 3⃣ Start the Local Server  
Run the following command inside the project directory:  
```sh
php -S localhost:8000
```
Then, open **[http://localhost:8000](http://localhost:8000)** in your browser.

---

## 🛡️ File Upload Vulnerability Labs  

| 📏 Lab # | 🛠️ Vulnerability Type               | 🔗 Link |
|----------|-----------------------------------|--------|
| Lab 1    | Basic file upload vulnerability  | [Go to Lab 1](labs/lab1/index.php) |
| Lab 2    | Content-Type restriction bypass  | [Go to Lab 2](labs/lab2/index.php) |
| Lab 3    | Double extension bypass          | [Go to Lab 3](labs/lab3/index.php) |
| Lab 4    | Blacklist extensions bypass      | [Go to Lab 4](labs/lab4/index.php) |
| Lab 5    | File upload leading to XSS attack | [Go to Lab 5](labs/lab5/index.php) |

---

## 📝 License  
This project is licensed under the **MIT License**. You are free to use, modify, and distribute it.  

---

## 💌 Contact  
For any questions, feel free to reach out:  
✉ Email: [mustafa.mohammed.1337@gmail.com](mailto:mustafa.mohammed.1337@gmail.com)  
👤 LinkedIn: [Mustafa Mohammed](https://www.linkedin.com/in/mustafa-mohamed-0126a924a/)  

