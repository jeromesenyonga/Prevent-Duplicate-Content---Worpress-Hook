# Prevent-Duplicate-Content---Worpress-Hook
Prevent duplicate content on comment pages using a hook

This prevents duplicate content in paged comments using the rel=“canonical” attribute.

First, we create a function to add the rel=“canonical” attribute to comment pages, except page 1. Then we hook this function to WordPress’ wp_head() function. As simple as that!




