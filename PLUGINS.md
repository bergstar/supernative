# NativePHP Plugins from GitHub Forks

This project uses forked versions of NativePHP Mobile plugins hosted on GitHub under the `bergstar` organization.

## Available Plugins

| Package | Version | Repository |
|---------|---------|------------|
| `nativephp/mobile-background-tasks` | `^0.0.3` | [bergstar/mobile-background-tasks](https://github.com/bergstar/mobile-background-tasks) |
| `nativephp/mobile-biometrics` | `^1.0` | [bergstar/mobile-biometrics](https://github.com/bergstar/mobile-biometrics) |
| `nativephp/mobile-firebase` | `^1.1` | [bergstar/mobile-firebase](https://github.com/bergstar/mobile-firebase) |
| `nativephp/mobile-geolocation` | `^1.0` | [bergstar/mobile-geolocation](https://github.com/bergstar/mobile-geolocation) |
| `nativephp/mobile-local-notifications` | `^0.0.2` | [bergstar/mobile-local-notifications](https://github.com/bergstar/mobile-local-notifications) |
| `nativephp/mobile-scanner` | `^1.0` | [bergstar/mobile-scanner](https://github.com/bergstar/mobile-scanner) |
| `nativephp/mobile-secure-storage` | `^1.0` | [bergstar/mobile-secure-storage](https://github.com/bergstar/mobile-secure-storage) |

## Installation

The `composer.json` already has VCS repositories configured. To install a plugin:

```bash
composer require nativephp/mobile-background-tasks
composer require nativephp/mobile-biometrics
```

Or multiple at once:

```bash
composer require nativephp/mobile-background-tasks nativephp/mobile-biometrics
```

## Adding to a New Project

To use these forks in a fresh project, add the VCS repositories to your `composer.json`:

```json
{
  "repositories": [
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-background-tasks"},
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-biometrics"},
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-firebase"},
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-geolocation"},
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-local-notifications"},
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-scanner"},
    {"type": "vcs", "url": "https://github.com/bergstar/mobile-secure-storage"}
  ]
}
```

Then require the desired plugins as shown above.
