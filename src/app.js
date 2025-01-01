const avatar = document.getElementById('user-avatar');
const tooltip = document.getElementById('tooltip');

avatar.addEventListener('mouseenter', () => {
    tooltip.style.display = 'block';
    const rect = avatar.getBoundingClientRect();
    tooltip.style.top = `${rect.bottom + window.scrollY + 5}px`;
    tooltip.style.left = `${rect.left + window.scrollX + rect.width / 2 - tooltip.offsetWidth / 2}px`;
});

avatar.addEventListener('mouseleave', () => {
    tooltip.style.display = 'none';
});

const tags = document.querySelectorAll(".tag");

const tagsData = [
    { "tagName": "Science", "bgTag": "bg-blue-100", "colorTag": "text-blue-600" },
    { "tagName": "Novel", "bgTag": "bg-green-100", "colorTag": "text-green-600" },
    { "tagName": "Fiction", "bgTag": "bg-green-100", "colorTag": "text-green-600" },
    { "tagName": "Romance", "bgTag": "bg-pink-100", "colorTag": "text-pink-600" },
    { "tagName": "Productivity", "bgTag": "bg-pink-100", "colorTag": "text-pink-600" },
    { "tagName": "Adventure", "bgTag": "bg-orange-100", "colorTag": "text-orange-600" },
    { "tagName": "Classic", "bgTag": "bg-gray-100", "colorTag": "text-gray-600" },
    { "tagName": "History", "bgTag": "bg-yellow-100", "colorTag": "text-yellow-600" },
    { "tagName": "Philosophy", "bgTag": "bg-purple-100", "colorTag": "text-purple-600" },
    { "tagName": "Self-help", "bgTag": "bg-teal-100", "colorTag": "text-teal-600" },
    { "tagName": "Dystopian", "bgTag": "bg-red-100", "colorTag": "text-red-600" },
    { "tagName": "Drama", "bgTag": "bg-red-100", "colorTag": "text-red-600" },
    { "tagName": "Biography", "bgTag": "bg-indigo-100", "colorTag": "text-indigo-600" },
    { "tagName": "Inspirational", "bgTag": "bg-cyan-100", "colorTag": "text-cyan-600" },
    { "tagName": "Fantasy", "bgTag": "bg-purple-200", "colorTag": "text-purple-800" },
    { "tagName": "Mystery", "bgTag": "bg-indigo-200", "colorTag": "text-indigo-800" }

];




tags.forEach(Element => {
    tagsData.forEach(tagData => {
        if (Element.textContent == tagData.tagName) {
            Element.classList.add(tagData.bgTag, tagData.colorTag);
        }
    })
})
