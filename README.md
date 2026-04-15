# MageUnconference NL site

**This repository holds the resources for the [mageunconference.nl](https://mageunconference.nl/) site.**

### Making PRs for the program
- Fork this repo
- Modify `content/data/program.json` and make sure not to break the JSON 
- Commit and push back the changes
- Create a Pull Request

### Development

```bash
git pull
composer install
```

To start a webserver:
````bash
symfony serve
````

To rebuild Tailwind:
```bash
npm install
npm run build
npm run watch
```