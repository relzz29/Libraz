const fs = require('fs');
const files = [
  'resources/views/statistik.blade.php',
  'resources/views/sirkulasi_sukses.blade.php',
  'resources/views/sirkulasi.blade.php',
  'resources/views/scanner.blade.php'
];

const targetImg = '<img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCeMcIBPpdbR0tPBGiVimgYl-q4p7nL7BcQYJ7IcdLCHLYTkHLDPnk-ayKRKdEev1qD1470u9-ar0rYopea9CJD2dRSAtpNmE2PU7moVedjpoyQR2058LWMVg4TfPJ9zIOuDWFYOIu-SZp6xOG3sT-vR-ZMPYVTpwuh_sxQZWAEviqDVh69xAt-vrz4HngLmA8xJMzVImBkfqVfslHgj4czghqYetb8nPu-LPshUAXXl8phoCVGXn6W"/>';
const replacementImg = '<img id="profile-avatar-small" alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User&amp;background=random&amp;color=fff"/>';

const snippet = \
<script>
  document.addEventListener('DOMContentLoaded', async () => {
    const token = localStorage.getItem('auth_token');
    if (token) {
      try {
        const response = await fetch('/api/user', {
          headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json'
          }
        });
        if (response.ok) {
          const user = await response.json();
          const elAvatarSmall = document.getElementById('profile-avatar-small');
          if (elAvatarSmall) {
            let avatarUrl = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(user.name) + '&background=random&color=fff';
            if (user.avatar) {
                avatarUrl = user.avatar.startsWith('http') ? user.avatar : '/' + user.avatar;
            }
            elAvatarSmall.src = avatarUrl;
          }
        }
      } catch (e) {
        console.error(e);
      }
    }
  });
</script>
</body></html>\;

files.forEach(file => {
  let content = fs.readFileSync(file, 'utf8');
  content = content.replace(targetImg, replacementImg);
  if (!content.includes('id="profile-avatar-small"')) {
      console.log('Failed to replace img in ' + file);
  }
  
  if (!content.includes("fetch('/api/user'")) {
    content = content.replace('</body></html>', snippet);
  }
  
  fs.writeFileSync(file, content);
  console.log('Updated ' + file);
});
