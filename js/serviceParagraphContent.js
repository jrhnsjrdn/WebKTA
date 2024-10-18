function selectButton(paraId) {
    // Hide all paragraphs
    const paragraphs = document.querySelectorAll('.content');
    paragraphs.forEach(para => {
        para.style.display = 'none'; // Hide all paragraphs
    });

    // Show the selected paragraph
    const selectedParagraph = document.getElementById(paraId);
    selectedParagraph.style.display = 'block'; // Show the selected paragraph
}