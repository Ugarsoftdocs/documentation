<?php
curl --request POST \
--url https://api.sendgrid.com/v3/mail/send \
--header 'authorization: Bearer <<YOUR_API_KEY>>' \
--header 'content-type: application/json' \
--data '{"personalizations":[{"to":[{"email":"john.doe@example.com","name":"John Doe"}],"subject":"Hello, World!"}],"content": [{"type": "text/plain", "value": "Heya!"}],"from":{"email":"sam.smith@example.com","name":"Sam Smith"},"reply_to":{"email":"sam.smith@example.com","name":"Sam Smith"}}'
?>