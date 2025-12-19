# mdkstarter

A Statamic Starter Kit.

## Installation

Create a new Statamic project using this starter kit:

```bash
statamic new my-site mortendk/mdkstarter
```

### Quick One-Liner

Install the starter kit and automatically append the Hetzner configuration:

```bash
statamic new my-site mortendk/mdkstarter --no-interaction && cd my-site && sed 's/^[[:space:]]*//' hetzner.yaml >> .env
```

### Local Development

If you are developing the starter kit locally and it's not yet on Packagist:

```bash
statamic new my-site --no-interaction && cd my-site && composer config repositories.mdkstarter path ../mdkstarter && php please starter:install mdk/mdkstarter --no-interaction && sed 's/^[[:space:]]*//' hetzner.yaml >> .env
```
