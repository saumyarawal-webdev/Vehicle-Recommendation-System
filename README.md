# Vehicle Recommendation System – Setup Guide

This guide provides step-by-step instructions to set up and run the **Vehicle Recommendation System** locally using **XAMPP**.

Since this project is **static** and does **not require any database**, only the **Apache server** needs to run.

---

## 🚀 Prerequisites

Before starting, make sure you have the following:

- **Windows OS** (instructions assume default installation path on C drive)
- **XAMPP** (Free, open-source web server stack)

---

## 📂 Installation & Setup Instructions

Follow the steps below to run the project locally:

### 1️⃣ Download the Project
Download the project files or clone it(usually provided as a `.zip` archive).

---

### 2️⃣ Extract the Zip File
Unzip the downloaded archive.  
You will get your main project folder (e.g., `vehicle-recommendation-system`).

---

### 3️⃣ Install XAMPP
If not already installed, download and install XAMPP.

**Default installation path:**
C:\xampp\
---

### 4️⃣ Open the Web Root Folder
Navigate to XAMPP’s web directory:

```bash 
C:\xampp\htdocs\
```

---

### 5️⃣ Paste the Project Folder
Copy your extracted project folder and paste it inside the `htdocs` directory.

---

### 6️⃣ Start Apache Server
1. Open the **XAMPP Control Panel**
2. Click **Start** next to **Apache**

> ✔️ The module indicator should turn green  
> ⚠️ MySQL is **not required** for this static project.

---

### 7️⃣ Run the Project in Browser
Open any browser and visit:

```bash 
http://localhost/project-folder-name/
```

Replace **project-folder-name** with your actual project folder name  
(e.g., `vehicle-recommendation-system`).

---

## 🎉 You're Ready!
The **Vehicle Recommendation System** should now load and run successfully in your browser.
