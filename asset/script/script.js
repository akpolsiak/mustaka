function showFeedback() {
  const ratingInputs = document.getElementsByName('rating');
  const feedbackText = document.getElementById('feedbackText');

  const feedbackMessages = [
      'Excellent',
      'Good',
      'Average',
      'Fair',
      'Poor'
  ];

  for (let i = 0; i < ratingInputs.length; i++) {
      if (ratingInputs[i].checked) {
          feedbackText.innerText = feedbackMessages[i];
          break; // exit the loop once a checked input is found
      }
  }
}
