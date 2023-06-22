
markup.replace(/<script>/gi, "&lt;script&rt;").replace(/</script>/gi, "&lt;/script&rt;");

markup.replace(/<script>/gi, "&lt;script&rt;");

var html = markup.replace(/<script[^>]*>/gi, "&lt;script&rt;").replace(/<\/script[^>]*>/gi, "&lt;/script&rt;");

markup='<b>Bold text here </b><i><script>alert("JS will be treated as normal text")</script></i>';