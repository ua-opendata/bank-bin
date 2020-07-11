<?php declare(strict_types=1);

namespace UaOpenData;

final class BankRepository
{
    private static BankRepository $instance;

    /** @var array<int, string> */
    private array $db;

    private function __construct()
    {
        $this->db = json_decode(
            file_get_contents(
                dirname(__DIR__) . DIRECTORY_SEPARATOR . "docs" . DIRECTORY_SEPARATOR . "db.json"
            ) ?: "}{",
            true,
            JSON_THROW_ON_ERROR
        );
    }

    public static function instance(): BankRepository
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    public function db(): array
    {
        return $this->db;
    }

    public function bank(int $bin): ?string
    {
        return $this->db()[$bin] ?? null;
    }
}
