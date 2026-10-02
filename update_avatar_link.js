const fs = require('fs');
const path = require('path');

const viewsDir = path.join(__dirname, 'resources', 'views');

// The regex needs to handle the literal string in the blade template.
// <div class="w-11 h-11 flex items-center justify-center"><img id="profile-avatar-small" ... /></div>
const regex = /<div class="w-11 h-11 flex items-center justify-center">([\s\S]*?)<img([^>]+)id="profile-avatar-small"([^>]+)>([\s\S]*?)<\/div>/g;

function walkDir(dir) {
    fs.readdirSync(dir).forEach(file => {
        let fullPath = path.join(dir, file);
        if (fs.lstatSync(fullPath).isDirectory()) {
            walkDir(fullPath);
        } else if (fullPath.endsWith('.blade.php')) {
            let content = fs.readFileSync(fullPath, 'utf8');
            if (regex.test(content)) {
                console.log(`Updating ${fullPath}`);
                let newContent = content.replace(regex, '<a href="/edit-profil" class="w-11 h-11 flex items-center justify-center hover:scale-105 transition-transform cursor-pointer" title="Edit Profil">$1<img$2id="profile-avatar-small"$3>$4</a>');
                fs.writeFileSync(fullPath, newContent, 'utf8');
            }
        }
    });
}

walkDir(viewsDir);
console.log('Done');
