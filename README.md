## PBHA Chinatown Citizenship

Single-site monorepo for PBHA Chinatown Citizenship.

### Structure

```
├── *.html              # Main site pages
├── assets/             # Main site CSS, images, vendor libs
├── includes/           # Main site shared nav/footer
└── resources/          # Study materials at /resources/...
    ├── *.html
    ├── assets/
    ├── includes/
    └── *_Modules/      # PHP study modules (English, US History, N400)
```

### URLs

- Main site: `/index.html`, `/classes.html`, etc.
- Study materials: `/resources/index.html`, `/resources/english.html`, etc.

### Deployment

cPanel deploys everything to `public_html/`, including the `resources/` folder.
