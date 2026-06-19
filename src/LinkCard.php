<?php

/**
 * Generates an HTML link card with a title, description, and URL.
 *
 * @param string $url The target URL for the link card.
 * @param string $title The title of the link card.
 * @param string $description A brief description for the link card.
 * @return string The HTML markup for the link card.
 */
function renderLinkCard(string $url, string $title, string $description): string
{
    $escapedUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
    $escapedTitle = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $escapedDescription = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');

    return <<<HTML
    <div class="link-card">
        <a href="{$escapedUrl}" target="_blank" rel="noopener noreferrer">
            <div class="link-card-content">
                <h3 class="link-card-title">{$escapedTitle}</h3>
                <p class="link-card-description">{$escapedDescription}</p>
            </div>
            <span class="link-card-url">{$escapedUrl}</span>
        </a>
    </div>
    HTML;
}

/**
 * Renders a sample link card for demonstration purposes.
 *
 * @param string $keyword The keyword to include in the card.
 * @return string The HTML markup for the sample link card.
 */
function renderSampleLinkCard(string $keyword): string
{
    $demoUrl = 'https://portal-circle28.com';
    $demoTitle = "专属{$keyword}体验";
    $demoDescription = "欢迎来到{$keyword}的世界，探索更多精彩内容。";

    return renderLinkCard($demoUrl, $demoTitle, $demoDescription);
}

// Example usage (uncomment in your application):
// $card = renderSampleLinkCard('28圈');
// echo $card;