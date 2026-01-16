<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    
    protected static ?string $navigationLabel = 'Pengaturan Website';
    
    protected static ?string $pluralLabel = 'Pengaturan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Hero Section')
                    ->schema([
                        Forms\Components\FileUpload::make('logo_path')
                            ->label('Logo Perusahaan')
                            ->image()
                            ->directory('settings'),
                        
                        Forms\Components\TextInput::make('hero_title')
                            ->label('Judul Hero')
                            ->default('KANTOR PEMASARAN')
                            ->required(),
                        
                        Forms\Components\TextInput::make('hero_subtitle')
                            ->label('Subjudul Hero')
                            ->default('PERUMAHAN')
                            ->required(),
                        
                        Forms\Components\Textarea::make('hero_tagline')
                            ->label('Tagline')
                            ->default('"Beli Rumah Harus Fachri Property Group"')
                            ->required()
                            ->rows(2),
                    ])->columns(2),

                Forms\Components\Section::make('Informasi Perusahaan')
                    ->schema([
                        Forms\Components\Textarea::make('company_description')
                            ->label('Deskripsi Perusahaan')
                            ->required()
                            ->rows(4)
                            ->placeholder('Fachri Property Group adalah pengembang properti...'),
                        
                        Forms\Components\Textarea::make('office_address')
                            ->label('Alamat Kantor')
                            ->required()
                            ->rows(3)
                            ->placeholder('Jl. Ampera No.22, RT.003/RW.015...'),
                    ]),

                Forms\Components\Section::make('Kontak')
                    ->schema([
                        Forms\Components\TextInput::make('phone_number')
                            ->label('Nomor Telepon')
                            ->tel()
                            ->required()
                            ->placeholder('0561-817-7746'),
                        
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->placeholder('fachri@gmail.com'),
                        
                        Forms\Components\TextInput::make('whatsapp_float')
                            ->label('WhatsApp Float Button')
                            ->tel()
                            ->required()
                            ->placeholder('6285750777700')
                            ->helperText('Nomor WA untuk tombol mengambang'),
                    ])->columns(3),

                Forms\Components\Section::make('Testimoni')
                    ->schema([
                        Forms\Components\TextInput::make('testimonial_title')
                            ->label('Judul Testimoni')
                            ->default('TESTIMONI MEREKA')
                            ->required(),
                        
                        Forms\Components\TextInput::make('testimonial_youtube_url')
                            ->label('Link YouTube Testimoni')
                            ->url()
                            ->placeholder('https://www.youtube.com/embed/...')
                            ->helperText('Gunakan format embed YouTube'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title')
                    ->label('Judul Hero'),
                
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Telepon'),
                
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diupdate')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }
}