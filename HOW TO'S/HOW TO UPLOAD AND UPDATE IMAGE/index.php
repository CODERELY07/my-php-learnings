<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Image</title>
</head>
<body>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" id="profileImage" name="profileImage" accept="image/*">
        <button type="submit">Upload Image</button>
    </form>
    <img id="profileImageDisplay" src="default-image.jpg" alt="Profile Image" style="width: 150px; height: 150px;">
    
    <script>
        document.getElementById('uploadForm').addEventListener('submit', async function (event) {
            event.preventDefault();
            
            const formData = new FormData();
            const imageFile = document.getElementById('profileImage').files[0];
            formData.append('profileImage', imageFile);
            
            try {
                const response = await fetch('upload.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    document.getElementById('profileImageDisplay').src = result.imageUrl;
                } else {
                    alert('Image upload failed!');
                }
            } catch (error) {
                console.error('Error uploading image:', error);
            }
        });
    </script>
</body>
</html>
