# Portfolio Images

## Adding Your Photo

To add your own photo to the portfolio:

1. **Prepare your photo:**
   - Recommended size: 300x300 pixels or larger (square format works best)
   - Supported formats: JPG, PNG, WebP, SVG
   - File size: Keep under 2MB for optimal loading

2. **Add your photo:**
   - Place your photo file in this directory (`public/images/`)
   - Recommended filename: `profile-photo.jpg` or `profile-photo.png`

3. **Update the portfolio:**
   - Open `resources/views/portfolio.blade.php`
   - Replace `placeholder-profile.svg` with your photo filename in both locations:
     - Line ~66: Hero section
     - Line ~103: About section

## Example:
```html
<!-- Change this: -->
<img src="{{ asset('images/placeholder-profile.svg') }}" alt="Your Name" class="profile-photo">

<!-- To this: -->
<img src="{{ asset('images/profile-photo.jpg') }}" alt="Your Name" class="profile-photo">
```

## Current Files:
- `placeholder-profile.svg` - Default placeholder image (you can replace this)

## Tips:
- Use a professional headshot for best results
- Ensure good lighting and clear image quality
- The CSS will automatically handle cropping and styling
- Images are optimized for both desktop and mobile viewing
