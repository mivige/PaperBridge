# PaperBridge

![Version](https://img.shields.io/badge/Version-1.0.0-brightgreen)
![Language](https://img.shields.io/badge/Language-php-purple)
![Language](https://img.shields.io/badge/Language-javascript-yellow)
![License](https://img.shields.io/badge/License-MIT-red)
---

PaperBridge is a simple, minimal web app for transferring files and notes between devices on the same local WiFi network, even when there is **no internet connection**. 

The project was born out of necessity: one day I had no internet at home, but my WiFi was still working. I needed to send a PDF from my PC to my iPad (which doesn’t have Bluetooth), so I started a local server with XAMPP, put the PDF in the `htdocs` folder, and downloaded it from the iPad.

PaperBridge is just a user-friendly interface to manage this process, making it easy to upload, download, and delete files, as well as share notes between devices.

---

## 📑 Table of Contents

- [Features](#-features)
- [Project Structure](#-project-structure)
- [Requirements](#-requirements)
- [How to Use (with XAMPP)](#-how-to-use-with-xampp)
- [Example Use Case](#example-use-case)
- [How it Works](#-how-it-works)
- [Disclaimers](#-disclaimers)
- [License](#-license)

---

## ✨ Features

- **Upload files** from any device on the network (PC, tablet, phone, etc.)
- **Download files** from the server to any device
- **Delete files** from the server
- **Write and save notes** from any device (notes are saved as `.txt` files)
- **Delete notes** from the server
- **Drag & drop** support for file uploads
- **Download all files as ZIP** with one click
- **Open files directly in the browser** (for supported formats like PDF and images)

## 🗂️ Project Structure

```
📁 PaperBridge/
├── 📁 assets/
│   ├── 📁 css/
│   │   └── style.css
│   ├── 📁 js/
│   │   └── script.js
│   └── 📁 img/
├── 📁 uploads/
│   └── (uploaded files will be here)
├── 📁 notes/
│   └── (saved notes will be here)
├── 📁 src/
│   ├── upload.php
│   ├── download.php
│   ├── save_note.php
│   ├── zip_download.php
│   └── delete.php
├── index.php
└── README.md
```

## 🖥️ Requirements

- **XAMPP** (or any local web server with PHP support)
  - Download XAMPP for Windows, macOS, or Linux here: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)

## 🚀 How to Use (with XAMPP)

1. **Download or clone this repository.**
2. **Copy the entire `PaperBridge` folder into your XAMPP `htdocs` directory.**
   - On Windows, this is usually: `C:\xampp\htdocs\`
3. **Start XAMPP and launch Apache.**
4. **Find your PC's local IP address:**
   - Press `Win + R`, type `cmd`, and press Enter.
   - In the command prompt, type `ipconfig` and press Enter.
   - Look for the line that says `IPv4 Address` (e.g., `192.168.1.42`).
5. **Open your browser and go to:**  
   `http://<your-pc-ip>/PaperBridge`  
   (For example: `http://192.168.1.42/PaperBridge`)  
   You can also use `http://localhost/PaperBridge` if you are on the same machine.
6. **Connect any device to the same WiFi** (no internet required!) and open the same address in its browser.
7. **Start uploading, downloading, and sharing notes!**

### Example Use Case

- Upload a file from your PC.
- Download it from your iPad or phone by opening the same local address.
- Write a note from your iPad and save it; read or download it from your PC.

## 🛠️ How it Works

- All files and notes are stored on your local server (your PC running XAMPP).
- Any device connected to the same WiFi can access the interface and transfer files/notes.
- No internet connection is required, just local network access.

## ⚠️ Disclaimers

- **Do NOT expose this app to the internet!**  
  PaperBridge is designed for local, personal use only. There is no authentication or advanced security.
- **Not suitable for large files or many users.**  
  This is a lightweight tool for quick, personal file and note sharing in offline or home LAN scenarios.
- **No encryption or user management.**  
  Anyone on your WiFi can access the interface if they know the address of the server.

---

If you find this project useful, please ⭐️ **star the repo on GitHub** and share your feedback!

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
